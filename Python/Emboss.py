import cv2
import matplotlib.pyplot as plt
import numpy as np


a=cv2.imread('lisa.png')
b1=np.zeros(a.shape[:3],np.uint8)
z=np.matrix([[-1,0,0],[0,0,0],[0,0,1]])
b1[:,:,0]=abs(cv2.filter2D(a[:,:,0],0,z))

plt.subplot(1,2,1)
plt.title("Gris")
plt.imshow(b1[:,:,0],cmap='gray')
plt.subplot(1,2,2)
plt.title("Original")
plt.imshow(cv2.cvtColor(a,cv2.COLOR_BGR2RGB))
plt.show()