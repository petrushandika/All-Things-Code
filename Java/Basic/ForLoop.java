package Basic;

public class ForLoop {
    public static void main(String[] args) {
        // For loop -> konstruksi yang digunakan untuk mengulang sekelompok pernyataan tertentu berulang kali selama kondisi tertentu terpenuhi
        /*
        Car pembuatan for loop:

        for (inisialisasi; kondisi; iterasi) {
            // Blok kode yang akan diulang
        }

        - Inisialisasi : menentukan nilai awal untuk variabel pengontrol loop
        - Kondisi : menentukan kondisi yang harus terpenuhi agar loop berjalan
        - Iterasi : menentukan bagaimana variabel pengontrol loop akan diubah setiap kali loop berakhir
         */

        for (int i = 1; i <= 5; i++) {
            System.out.println("Angka : " + i);
        }
    }
}
