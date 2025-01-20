#!/bin/bash

# Create two files with random sizes between 1 KB and 500 KB
for i in {1..2}; do
    # Generate a random size between 1 KB (1024 bytes) and 500 KB
    size=$(( (RANDOM % 500 + 1) * 1024 ))
    # Create a file with random data of the generated size
    head -c "$size" </dev/urandom > "file${i}.txt"
done

# Compress the files with gzip and bzip2
gzip -c file1.txt > file1.txt.gz
bzip2 -c file1.txt > file1.txt.bz2
gzip -c file2.txt > file2.txt.gz
bzip2 -c file2.txt > file2.txt.bz2

# Output the results to compression_test_result.txt
echo "Compression results for file1.txt:" > compression_test_result.txt
echo "Original size: $(stat -c%s file1.txt) bytes" >> compression_test_result.txt
echo "gzip compressed size: $(stat -c%s file1.txt.gz) bytes" >> compression_test_result.txt
echo "bzip2 compressed size: $(stat -c%s file1.txt.bz2) bytes" >> compression_test_result.txt
echo "" >> compression_test_result.txt

echo "Compression results for file2.txt:" >> compression_test_result.txt
echo "Original size: $(stat -c%s file2.txt) bytes" >> compression_test_result.txt
echo "gzip compressed size: $(stat -c%s file2.txt.gz) bytes" >> compression_test_result.txt
echo "bzip2 compressed size: $(stat -c%s file2.txt.bz2) bytes" >> compression_test_result.txt

# Cleanup
rm file1.txt file2.txt file1.txt.gz file1.txt.bz2 file2.txt.gz file2.txt.bz2

echo "Compression test results written to compression_test_result.txt"
