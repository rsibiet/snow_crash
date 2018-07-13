#!/usr/bin/python3
import sys

size = len(sys.argv[1])
i = 0
while i < size:
	sys.stdout.write(chr(ord(sys.argv[1][i]) - i))
	i += 1
