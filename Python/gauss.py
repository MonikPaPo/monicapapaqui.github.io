import cv2
import numpy as np
from matplotlib import pyplot as plt

image1=cv2.imread('lisa.png')
n=(image1.shape[0])
n1=int(n/2)
m=(image1.shape[1])
m1=int(m/2)
gaussian=np.zeros((n,m))

sig=200

for i in range (n):
	for j in range(m):
		gaussian[i,j]=np.exp(-((m1-j)**2+(i-n1)**2)/(2*sig**2))/(2*np.pi*sig**2)

plt.figure(1)
plt.imshow(gaussian,cmap='gray')
w=np.zeros(image1.shape[:3], np.uint8)
F1=np.zeros(image1.shape[:2])
F1=np.fft.fft2(image1[:,:,0])
result1=F1*gaussian
F3=(np.fft.ifft2(result1))
plt.figure(2)
plt.imshow(abs(F3),cmap='gray')
plt.show()