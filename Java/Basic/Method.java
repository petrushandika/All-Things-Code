package Basic;

public class Method {
    // Method -> blok kode yang dapat dipanggil atau dieksekusi untuk melakukan tugas tertentu

    /*
        Sintaks Method

        modifier returnType namaMethod(parameter) {
            // Blok kode method
        }

        - Modifier : menentukan aksesbilitas method (public, private, protected, atau default)
        - Return Type : menentukan jenis data yang akan dikembalikan method setelah dieksekusi. Jika method tidak mengembalikan nilai, gunakan "void"
        - Nama Method : nama unik untuk mengidentifikasi method
        - Parameter : Data yang diterima oleh method (opsional)

        Macam macam modifier: Public, Private, Protect, Default, dan Static
     */
    public static String welcome (String name) {
        return "Halo, " + name + "! Selamat datang di Developer Milenial";
    }

    public static void main (String[] args) {
        String nama = "PetrusHandika";
        String welcoming = welcome(nama);
        System.out.println(welcoming);
    }
}
