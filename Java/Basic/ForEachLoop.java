package Basic;

public class ForEachLoop {
    public static void main (String[] args) {
        // For Each Loop -> khusus untuk mengulang elemen dari suatu koleksi atau array

        /*
            for (TipeData elemen: array) {
                Blok kode yang akan dijalankan untuk setiap elemen dalam array
            }
         */
        int[] angkaArray = {1, 2, 3, 4, 5};

        for (int angka : angkaArray) {
            System.out.println("Angka : " + angka);
        }
    }
}
