package Basic;

public class IfStatement {
    public static void main (String[] args) {
        // If statement -> kondisi ini sebuah pernyataan atau ekspresi yang menghasilkan nilai boolean (true atau false)
        // Else if statement -> untuk menjalankan ketika memiliki lebih dari dua kondisi yang ingin diperiksa dalam program
        // Nested if -> menempatkan satu pernyataan if di dalam pernyataan if lainnya dalam pemrograman

        int skor = 70;

        if (skor >= 60) {
            System.out.println("Selamat, anda lulus!");

            if (skor >= 90) {
                System.out.println("Nilai A");
            } else if (skor >= 80) {
                System.out.println("Nilai B");
            } else if (skor >= 70) {
                System.out.println("Nilai C");
            } else if (skor >= 60) {
                System.out.println("Nilai D");
            } else {
                System.out.println("Nilai E");
            }
        } else {
            System.out.println("Maaf, anda tidak lulus!");
        }
    }
}
