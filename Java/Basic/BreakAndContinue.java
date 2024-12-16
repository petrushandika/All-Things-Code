package Basic;

public class BreakAndContinue {
    public static void main(String[] args) {
        // Break dan Continue -> kontrol yang digunakan dalam loop untuk mengendalikan aliran eksekusi program

        // break
        System.out.println("Break");
        for (int i = 1; i <= 5; i++) {
            if (i == 3) {
                break; // Keluar dari loop saat i = 3
            }
            System.out.println("Angka : " + i);
        }

        // continue
        System.out.println("Continue");
        for (int i = 1; i <= 5; i++) {
            if (i == 3) {
                continue; // Lewati iterasi saat i = 3
            }
            System.out.println("Angka : " + i);
        }
    }
}
