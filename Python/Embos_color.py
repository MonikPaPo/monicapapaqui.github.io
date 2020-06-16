import cv2
import matplotlib.pyplot as plt
import numpy as np


a=cv2.imread('lisa.png')
b1=np.zeros(a.shape[:3],np.uint8)
z=np.matrix([[-1,0,0],[0,0,0],[0,0,1]])

for i in range(3):
    b1[:,:,i]=abs(cv2.filter2D(a[:,:,i],0,z))

plt.subplot(1,2,1)
plt.title("Gamas")
plt.imshow(cv2.cvtColor(b1,cv2.COLOR_RGB2BGR))
plt.subplot(1,2,2)
plt.title("Original")
plt.imshow(cv2.cvtColor(a,cv2.COLOR_RGB2BGR))
plt.show()


