import cv2
import numpy as np
from matplotlib import pyplot as plt

image1 = cv2.imread('lisa.png')
n = (image1.shape[0])
n1 = int(n / 2)
m = (image1.shape[1])
m1 = int(m / 2)
gaussian = np.zeros((n, m))

sig = 50

for i in range(n):
    for j in range(m):
        gaussian[i, j] = np.exp(-((m1 - j) ** 2 + (i - n1) ** 2) / (2 * sig ** 2)) / (2 * np.pi * sig ** 2)

plt.figure(1)
plt.imshow(gaussian, cmap='gray')
w = np.zeros(image1.shape[:3], np.uint8)
F1 = np.zeros(image1.shape[:2])

for i in range(3):
    F1 = (np.fft.fft2(image1[:, :, i]))
    result1 = gaussian * F1
    F3 = (np.fft.ifft2(result1))
    w[:,:,i]=abs(F3)

plt.figure(2)
plt.imshow(abs(F3))
# plt.figure(3)
# plt.imshow(cv2.cvtColor(w,cv2.COLOR_BGR2RGB))
plt.show()
