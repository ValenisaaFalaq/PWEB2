 P W E B 2 

<h1> PWEB 2 </h1> 
<h2> Object Oriented Programming / Pemrograman Berorientasi Objek</h2>
Sebelum object oriented programming prosedur dalam pemrograman kita menggunakan pemrograman prosedural dimana program akan dibagi menjadi sekumpulan fungsi. Dalam pemrograman prosedural data dan fungsi disimpan dalam berbagai variable. Namun, di dalam pemrograman berorientasi objek kita menggabungkan variabel dan fungsi ke dalam suatu objek. Di dalam pemrograman berorientasi objek kita menyebut 'variable' sebagai 'properti' dan 'fungsi' sebagai 'methode'. Jadi dalam pemrograman berorientasi objek, kita mengelompokkan variable dan fungsi yang saling berkaitan ke dalam objek.
 <h3>Pengenalan Kelas, Obek dan Method dalam PHP</h3>
Dalam pemrograman berorientasi objek kita akan sering menggunakan kelas (class), objek dan methode. 
<h3>Kelas (class)</h3>
kelas (class) bisa dibilang merupakan template untuk objek. Template ini berisi atribut dan methode dari suatu objek. Fungsi Atribut disini adalah untuk menyimppan data, sedangkan methode merupakan fungsi yang dapat dipanggil oleh objek. 
Atribut memiliki beberapa jenis, yaitu public, private, dan protected. Adapun penggunaan jenis jeis atribut itu menyesuaikan dengan keinginan hak ases untuk setiap atirbut. Public sendiri digunakan agar atribut bis diakses dari mana saja dalam kelas itu sendiri, kelas turunannya, maupun dari luar kelas. Private digunakan untuk melindungi data agar hanya bisa diakses dari salam kelas yang mendeklarasikan nya. Protected bisa diakses oleh kelas itu sendiri maupun kelas turunannya. 
contoh pendefinisian suatu class :
<br>

![Capture1](https://github.com/user-attachments/assets/eaf8004d-c22f-478c-bf08-10fc657a7685)

<h3>Object</h3>
Object merupakan instansiasi dari suatu kelas. Suatu kelas bukanlah apa apa tanpa objek. Kita dapat membuat banyak objek dari sebuah kelas. Setiap objek memiliki semua properti dan metode yang di definisikan dalam suatu class.
contoh pendefinisian suatu object :

![image](https://github.com/user-attachments/assets/54fa1bde-5491-4e89-9fb7-01fa89b63ae8)



<h3>Methode</h3>
methode merupakan fungsi yang berada dalam suatu class. method ini merupakan semua proses yang akan dijalankan dengan instansiasi object.
contoh pendefinisian suatu methode :
![image](https://github.com/user-attachments/assets/bdac5da7-d6a8-4f37-a4c7-0e5d9606d170)
$mahasiswa1 merupakan object dari kelas mahasiswa. echo diatas berfungsi untuk memunculkan output dengan memanggil fungsi dalam kelas mahasiswa yang sudah di instansiasi dalam objek.

output yang akna dihasilkan adalah sebagai berikut 

![image](https://github.com/user-attachments/assets/285a3444-5bd1-4a99-836b-9edcb85fb4dd)


<h2>Tugas Jobsheet 1</h2>
1. membuat class dosen dengan atribut nama, nip dan mata kuliah. disini saya menggunakan atribut public.

![image](https://github.com/user-attachments/assets/eeb6b3aa-439a-43ba-95ba-1c3526efcbec)

implementasi fungsi construct berfungsi untuk mengatur nilai awal suatu atribut saat objek dibuat

2. membuat metode tampilDosen(). dalam methode ini return digunakan untuk mengemmbalikan suatu nilai. memungkinkan fungsi memberikan output yang sesuai.
   
![image](https://github.com/user-attachments/assets/000215cf-4e72-4d3b-928f-03181eb2ac01)

4. instansiasi objek dan mencetak output. dalam hal ini saya meninstansiasi dengan "Vigo Dewandra Hendratmoko", "230302094", "Pemrograman Web"
   
![image](https://github.com/user-attachments/assets/0a239676-b9ed-4b3c-97b2-888955d7d904)

output:

![image](https://github.com/user-attachments/assets/873927cd-4343-4da5-b5da-294bcde896b9)

<h1>ENCAPSULATION</h1>
dengan encapsulation mengelompokkan variabel dan fungsi yang terkait sehingga dapat mengurangi kompleksitas. kita bisa menggunakan kembali objek ini di program yang berbeda

![Capture9](https://github.com/user-attachments/assets/de820ed3-25b2-4df0-8302-c40ab467442c)



<h1>INHERITANCE</h1>

Inheritance merupakan pewarisan dimana mekanisme ini memungkinkan kita untuk tidak menggunakan kode yang berulang. alih alih mendefinisikan kembali semua properti dan metode di setiap program kita dapat mendefinisikannnya sekali dalam parent class. 

![image](https://github.com/user-attachments/assets/bebad84a-0856-450a-b1b3-d8878e5b555a)

<h1>POLYMORPHISM</h1>

poly berarti banyak dan morphism berarti bentuk. jadi, polimorfisme berarti banyak bentuk. dalam pemrograman berorientasi objek, polimorpishm adalah teknik yang menghilangkan struktur yang panjang.

![Capture11](https://github.com/user-attachments/assets/36e5054e-63fb-4ee2-afb1-04d5b5c40ae4)

dalam program diatas kita tidak perlu lagi menuliskan fungsi getname pada child class, karena sudah didefinisikan di parent class

<h1>ABSTRACTION</h1>
yaitu suatu proses yang menyembunyikan detail internal dan hanya menampilkan fitur penting saja.

![image](https://github.com/user-attachments/assets/00039fd5-1113-465e-b3ab-64da8dd1eb45)

instansiasi object abstraction

![image](https://github.com/user-attachments/assets/5baa2f80-cd1a-4c1f-aa84-7c6eff78f0c9)









