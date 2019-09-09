# OpenMV_Face_Recognition
基于OpenMV的人脸识别，支持人脸注册、人脸检测、人脸识别


1. 上电后等待IoT连接oceanconnect平台
2. 连接完成后oled显示“status”
3. 此时通过摄像头可进行人脸检测，但由于SD卡内无文件，无法匹配人脸
4. 按下F1按键，进入人脸注册模式，连续拍5张照存入SD卡（拍摄时绿灯快闪50ms，拍摄完绿灯闪1000ms）
5. 再识别，可完成人脸识别（红灯闪1000ms）。摄像头向IoT平台发送消息，以示匹配成功
6. IoT平台收到指令后，oled显示unlock，绿色led灯亮（模拟门锁），并向oceanconnect上报数据
7. 解锁5s后，自动上锁，oled显示lock，绿色led灯灭，并向oceanconnect上报数据
8. Oceanconnect后台收到数据
9. Oceanconnect后台可下发指令至IoT平台
10. IoT平台收到指令并进行相应操作
