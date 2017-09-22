s = "(((())))"

def hefa(ss):
    print(ss)
    temp = []
    for c in ss:
        if c=='(':
            temp.append(c)
        else:
            if len(temp)>0 and temp[-1]=='(':
                temp.pop()
            else:
                return 0
    return len(temp)==0

def get(ss):
    ss = list(ss)
    ss.pop(0)
    index = 0
    temp = 0
    for i in range(len(ss)):
        if ss[i]==')' and hefa(ss[:i]+ss[i+1:]):
            temp += 1
            index = i
    if temp==0:
        return 1
    return temp * get(ss.pop(index))

ret = get(s)
print(ret)