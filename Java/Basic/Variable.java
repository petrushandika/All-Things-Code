package Basic;

public class Variable {
    public static void main(String[] args) {
        // Variable -> setiap variabel memiliki tipe data dan nilai, seperti bilangan bulat, desimal, karakter, dll.
        // Langkah penggunaan variabel -> deklarasi variabel (nama dan tipe)
        // Aturan pada penamaan variabel -> tidak boleh white space dan tidak boleh dimulai dengan angka
        // Case sensitive -> huruf besar dan kecil dianggap karakter yang berbeda

        // Deklarasi dan inisialisasi variabel
        String name = "Petrus Handika";
        byte age = 22;
        double height = 172.5;

        // Cetak variabel
        System.out.println("Nama: " + name);
        System.out.println("Umur: " + age);
        System.out.println("Tinggi Badan: " + height);

        // var -> variabel
        var location = "Jakarta";
        System.out.println("Lokasi : " + location);

        // const -> konstanta
        final double pi = 3.14;
        // pi = 22.7; nilai di samping tidak bisa diubah
        System.out.println("pi : " + pi);
    }
}
