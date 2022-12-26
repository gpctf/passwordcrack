# Polecenia aby uruchomić obraz
## Budowa obrazu
```bash
sudo docker build -t passwordcrack ./
```
## Uruchomienie obrazu
```bash
sudo docker run -p 3000:80 -e "FLAG=gpctf{testflag}" passwordcrack
```
