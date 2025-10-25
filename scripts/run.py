#!/usr/bin/env python3
"""
Run without prompts: remove the word "Salinan" from filenames
inside a specific folder you set below.

Configure these variables and run:
- TARGET_FOLDER: path to the folder to scan (string)
- INCLUDE_SUBFOLDERS: True to scan subfolders, False otherwise

Notes:
- Only files are renamed; directories are ignored.
- Exact substring removal (case-sensitive): "Salinan" -> ""
- Basic cleanup: collapses multiple spaces, trims spaces around dots and ends
"""

from __future__ import annotations

import os
import re
import sys
from typing import Iterable, List, Tuple


# === Edit these ===
TARGET_FOLDER = r"assets/teras ryker"
INCLUDE_SUBFOLDERS = False
# ==================


TEMPLATE = "Salinan"


def iter_files(folder: str, recursive: bool) -> Iterable[Tuple[str, str]]:
    if recursive:
        for root, _dirs, files in os.walk(folder):
            for name in files:
                yield root, name
    else:
        try:
            for name in os.listdir(folder):
                full = os.path.join(folder, name)
                if os.path.isfile(full):
                    yield folder, name
        except FileNotFoundError:
            raise SystemExit(f"Folder not found: {folder}")


def cleanup_name(name: str) -> str:
    cleaned = name.replace(TEMPLATE, "")
    cleaned = re.sub(r"[\s_-]{2,}", " ", cleaned)
    cleaned = re.sub(r"\s*\.\s*", ".", cleaned)
    cleaned = cleaned.strip(" .-_")
    return cleaned


def plan_renames(folder: str, recursive: bool) -> List[Tuple[str, str]]:
    renames: List[Tuple[str, str]] = []
    for root, name in iter_files(folder, recursive):
        if TEMPLATE not in name:
            continue
        new_name = cleanup_name(name)
        if not new_name or new_name == name:
            continue
        src = os.path.join(root, name)
        dst = os.path.join(root, new_name)
        if os.path.exists(dst):
            base, ext = os.path.splitext(new_name)
            i = 1
            while True:
                candidate = f"{base} ({i}){ext}" if base else f"({i}){ext}"
                dst_candidate = os.path.join(root, candidate)
                if not os.path.exists(dst_candidate):
                    dst = dst_candidate
                    break
                i += 1
        renames.append((src, dst))
    return renames


def apply_renames(renames: List[Tuple[str, str]]) -> Tuple[int, int]:
    ok = 0
    fail = 0
    for src, dst in renames:
        try:
            os.rename(src, dst)
            print(f"[renamed] {src} -> {dst}")
            ok += 1
        except OSError as e:
            print(f"[error]   {src} -> {dst}: {e}", file=sys.stderr)
            fail += 1
    return ok, fail


def main() -> int:
    folder = TARGET_FOLDER or os.getcwd()
    if not os.path.isdir(folder):
        print(f"Not a directory: {folder}", file=sys.stderr)
        return 2
    folder = os.path.abspath(folder)

    renames = plan_renames(folder, INCLUDE_SUBFOLDERS)
    if not renames:
        print("No files with 'Salinan' found. Nothing to do.")
        return 0

    print(f"Planned changes ({len(renames)}):")
    for src, dst in renames:
        print(f"  {src} -> {dst}")

    ok, fail = apply_renames(renames)
    print(f"\nDone. Renamed: {ok}, Failed: {fail}")
    return 0 if fail == 0 else 1


if __name__ == "__main__":
    raise SystemExit(main())
