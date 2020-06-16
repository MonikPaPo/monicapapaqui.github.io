import cv2
import numpy as np
import matplotlib.pyplot as plt

a=cv2.imread("lisa.png");
n=(a.shape[0])
m=(a.shape[1])
c=np.zeros((n,m))
c1=np.zeros((n,m))
d=np.zeros((n,m))
d1=np.zeros((n,m))
e=np.zeros(a.shape[:3], np.uint8)

for i in range (a.shape[0]):
	for j in range(a.shape[1]):
		m=((i-(a.shape[0]/2))**2 +((a.shape[1]/2)-j) **2)**		(0.5)
		if(10< m < 40):
		    c1[i,j]=1

plt.figure(2)
plt.imshow(c1,cmap='gray')

for i in range(3):
	c=(np.fft.fft2(a[:,:,i]))
	c=np.fft.fftshift(c)
	d=c1*c
	d1=np.fft.ifft2(d)
	e[:,:,i]=abs(d1)

plt.figure(5)
w=np.hstack((a,e))
plt.imshow(cv2.cvtColor(w, cv2.COLOR_BGR2RGB))
plt.show()