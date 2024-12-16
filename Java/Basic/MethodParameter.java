package Basic;

public class MethodParameter {
    // Method tanpa parameter -> tidak menerima argumen atau nilai yang diberikan saat pemanggilan method
    public static void hello() {
        System.out.println("Hello");
    }

    // Method parameter -> menerima argumen atau nilai yang diberikan saat pemanggilan method
    public static void penjumlahan(int angka) {
        System.out.println(2 * angka + angka);
    }

    /*
        Bentuk matematika
        f(a) = 2 x a + a
        f(3) = 2 x 3 + 3
        f(3) = 9
     */

    public static void welcome(String nama) {
        System.out.println("Hello, Nama saya " + nama);
    }

    public static void order (int porsi, String makanan) {
        System.out.println("Saya pesan " + porsi + " porsi " + makanan);
    }

    public static void main(String[] args) {
        // Menampilkan output method dengan parameter
        welcome("Petrus");
        welcome("Handika");
        order(2, "Nasi Goreng");
    }
}
