package Basic;

public class TernaryOperation {
    public static void main (String[] args) {
        // Ternary operator -> operator khusus untuk melakukan pengecekan kondisi dan memberikan nilai berdasarkan hasil pengecekan tersebut
        // variabel = (kondisi) ? "nilai benar" : "nilai salah";
        int angka = 5;
        String ternaryResult = (angka > 0) ? "Angka positif" : "Angka negatif";
        System.out.println("Hasil ternary operator : " + ternaryResult);
    }
}
