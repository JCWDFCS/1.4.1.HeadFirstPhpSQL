
def findlog(base,result):
    n = 1
    while base ** n < result: #开始循环的条件而非停止循环的条件。
        n += 1
    return n
print(findlog(2,32768))
