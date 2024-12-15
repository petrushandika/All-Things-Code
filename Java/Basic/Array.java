package Basic;

public class Array {
    public static void main(String[] args) {
        // Cara menginstansi array:
        // Deklarasi array
        // Inisialisasi array -> menggunakan operator new kemudian tambahkan tipe data yang sesuai dengan tipe data pada pendeklarasian
        // Menentukan ukuran array

        int [] arrayNum;

        int arrayNum2 [];

        int [] arrayNum3 = new int [5];

        arrayNum3[0] = 10;
        arrayNum3[1] = 20;
        arrayNum3[2] = 30;
        arrayNum3[3] = 40;
        arrayNum3[4] = 50;

        String [] ArrayString = {"Petrus", "Handika", "Nadia", "Mora"};
        System.out.println(ArrayString[0]);

        System.out.println(ArrayString.length);

        // Array multidimensi
        int [][] matrix = {
                {1, 2, 3},
                {4, 5, 6},
                {7, 8, 9},
        };
        System.out.println(matrix[2][2]);
    }
}
