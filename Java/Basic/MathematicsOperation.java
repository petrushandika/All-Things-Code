package Basic;

public class MathematicsOperation {
    public static void main(String[] args) {
        int penjumlahan, pengurangan, perkalian, pembagian, modulo;

        penjumlahan = 2 + 3;
        pengurangan = 2 - 3;
        perkalian = 2 * 3;
        pembagian = 4 / 2;
        modulo = 6 % 4;

        // Penjumlahan
        System.out.println("Hasil Perjumlahan = " + penjumlahan);

        // Pengurangan
        System.out.println("Hasil Pengurangan = " + pengurangan);

        // Perkalian
        System.out.println("Hasil Perkalian = " + perkalian);

        // Pembagian
        System.out.println("Hasil Pembagian = " + pembagian);

        // Modulo
        System.out.println("Hasil Modulo = " + modulo);

        // Bentuk Perhitungan Matematika
        int a = 8;
        int b = 2;
        int perhitungan = a * a - (a + b) / 2;
        /*
        = 8 x 8 - (8 + 2) / 2
        = 64 - 10 / 2
        = 64 - 5
        = 59
         */

        System.out.println("Hasil Perhitungan = " + perhitungan);

        // Augmented Assignment
        int c = 20;

        c += 10;
        System.out.println(c);
        c -= 10;
        System.out.println(c);
        c *= 10;
        System.out.println(c);
        c /= 10;
        System.out.println(c);
        c %= 10;
        System.out.println(c);

        // Unary Operator
        int d = 50;

        // Increment
        d++;
        System.out.println("Increment = " + d);

        // Decrement
        d--;
        System.out.println("Decrement = " + d);

        // Akar, Pengkat, dan Menghitung Sinus
        double angka = 15;

        // Math.sqrt (angka)
        double akarKuadrat = Math.sqrt(angka);
        System.out.println("Akar kuadrat dari " + angka + "adalah " + akarKuadrat);

        // Math.pow(angka, pangkat)
        double hasilPangkat = Math.pow(angka, 2);
        System.out.println(angka + " Pangkat dua adalah " + hasilPangkat);

        // Math.PI = phi
        // Math.sin(SudutRadian);
        double sudutRadian = Math.PI / 4;
        double nilaiSinus = Math.sin(sudutRadian);
        System.out.println("Sinus dari sudut" + Math.toDegrees(sudutRadian) + " derajat adalah " + nilaiSinus);


    }
}
