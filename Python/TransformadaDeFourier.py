import cv2 as cv
import numpy as np
from matplotlib import pyplot as plt

image1= cv.imread('lisa.png')


w1=np.fft.fft2(image1)
w2=np.fft.fftshift(w1)
w3=np.fft.ifft2(w1)
w3=w3.real.astype(int)


plt.figure(1)
plt.imshow(cv.cvtColor(image1, cv.COLOR_BGR2RGB))


plt.figure(2)
plt.imshow(np.uint8(w2.real.astype(int)))
plt.figure(3)
plt.imshow(cv.cvtColor(np.uint8(w3), cv.COLOR_BGR2RGB))
plt.show()