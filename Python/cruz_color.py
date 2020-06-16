import cv2 as cv
import numpy as np
from matplotlib import pyplot as plt
img= cv.imread('lisa.png')
n,m=img.shape[:2]
N=int(n/2)
M=int(m/2)
f=np.zeros((n,m))
e=np.zeros(img.shape[:3], np.uint8)

k=150
l=50
for i in range(N-k, N+k):
    for j in range(M-1, M+l):
        f[j,i]=1
        f[i,j]=1

for i in range(3):
	w1 = np.fft.fft2(img[:, :, i])
	w1 = np.fft.fftshift(w1)
	w2 = w1 * f
	w3 = np.fft.ifft2(w2)
	e[:, :, i] = abs(w3)

plt.figure(0)
plt.imshow(cv.cvtColor(img,cv.COLOR_RGB2BGR))
plt.figure(1)
plt.imshow(f, cmap='gray')
plt.figure(2)
plt.imshow(cv.cvtColor(e,cv.COLOR_RGB2BGR))
plt.show()
