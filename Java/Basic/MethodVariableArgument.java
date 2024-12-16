package Basic;

public class MethodVariableArgument {
    // Method variable argument -> method dapat menerima sejumlah variabel sebagai argumen, tanpa harus mendefinisikan jumlah argumen

    /*
        modifier returnType namaMethod(tipeData... namaVariabel) {
            // blok kode method
        }

     - Modifier : menentukan aksesbilitas method (public, private, protected, atau default
     - Return Type : menentukan jenis data yang akan dikembalikan method setelah eksekusi. Jika method tidak mengembalikan nilai, gunakan "void"
     - Nama Method : nama unik untuk mengidentifikasi method
     - tipeData : jenis data dari argumen variabel
     - namaVariabel : nama variabel untuk mewakili argumen variabel (dapat berupa satu atau lebih)

     */

    public static int jumlahAngka(int... angka) {
        int total = 0;
        for (int num : angka) {
            total += num;
        }
        return total;
    }

    public static void main(String[] args) {
        System.out.println(jumlahAngka(2, 4, 6, 8));
        System.out.println(jumlahAngka(1, 3, 5, 7, 9 ));
    }
}
