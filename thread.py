from time import sleep
from threading import *
class hi(Thread):
    def run(self):
        for i in range(8):
            print("hi")
            sleep(0.001)
            
t1=hi()
t1.start()