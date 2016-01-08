import glob, os
os.chdir("")
for file in glob.glob("*.css"):
    print(file)
