import requests
import json
import time

# Definisikan konstanta
URL_API = "https://api.openweathermap.org/data/2.5/weather"
APP_ID = "your-app-id"

# Fungsi untuk mendapatkan data cuaca
def get_weather_data(lat, lon):
    params = {
        "appid": APP_ID,
        "lat": lat,
        "lon": lon,
    }
    response = requests.get(URL_API, params=params)
    data = json.loads(response.content)
    return data

# Fungsi untuk mendapatkan intensitas cahaya
def get_light_intensity():
    # Gunakan sensor cahaya untuk mendapatkan intensitas cahaya
    # Contoh:
    # light_intensity = sensor.get_light_intensity()
    return 1000

# Fungsi untuk mengecek apakah hujan turun
def is_raining():
    # Gunakan sensor hujan untuk mendeteksi hujan
    # Contoh:
    # is_raining = sensor.is_raining()
    return False

# Fungsi untuk membuka jemuran
def open_clothesline():
    # Gunakan motor untuk membuka jemuran
    # Contoh:
    # motor.open()
    pass

# Fungsi untuk menutup jemuran
def close_clothesline():
    # Gunakan motor untuk menutup jemuran
    # Contoh:
    # motor.close()
    pass

# Fungsi untuk menampilkan dashboard
def display_dashboard():
    # Dapatkan data cuaca
    weather_data = get_weather_data(-6.9267, 110.4317)

    # Dapatkan intensitas cahaya
    light_intensity = get_light_intensity()

    # Cek apakah hujan turun
    is_raining = is_raining()

    # Tampilkan dashboard
    # Contoh:
    # print("Cuaca:", weather_data["weather"][0]["main"])
    # print("Intensitas cahaya:", light_intensity)
    # print("Hujan turun:", is_raining)
    # print("Jemuran:", "Terbuka" if is_open else "Tertutup")

# Program utama
if __name__ == "__main__":
    # Jalankan fungsi untuk menampilkan dashboard
    display_dashboard()

    # Perulangan untuk mengecek apakah hujan turun
    while True:
        # Dapatkan data cuaca
        weather_data = get_weather_data(-6.9267, 110.4317)

        # Cek apakah hujan turun
        is_raining = is_raining()

        # Jika hujan turun, tutup jemuran
        if is_raining:
            close_clothesline()

        # Tunda 5 detik
        time.sleep(5)
