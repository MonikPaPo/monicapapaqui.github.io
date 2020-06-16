import cv2 as cv
import numpy as np
from matplotlib import pyplot as plt

img= cv.imread('lisa.png')


n,m=img.shape[:2]

N=int(n/2)
M=int(m/2)
f=np.zeros((n,m))

k=150
l=50
for i in range(N-k, N+k):
    for j in range(M-1, M+l):
        f[j,i]=1
        f[i,j]=1


w1=np.fft.fft2(img[:,:,1])
w1=np.fft.fftshift(w1)
w2=w1*f
w3=np.fft.ifft2(w2)
w3=abs(w3)
plt.figure(0)
plt.imshow(img[:,:,0], cmap='gray')
plt.figure(1)
plt.imshow(f, cmap='gray')
plt.figure(2)
plt.imshow(w3, cmap='gray')
plt.show()



