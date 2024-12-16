package Basic;

public class DoWhileLoop {
    public static void main (String[] args) {
        // Do While Loop -> menjalankan suatu blok kode terlebih dahulu, kemudian melakukan pengecekan kondisi
        int count = 1;
        do {
            System.out.println("Perulangan ke : " + count);
            count++;
        } while (count <= 5);
    }
}
