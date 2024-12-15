package Basic;

public class BooleanOperation {
    public static void main(String[] args) {
        boolean x = true;
        boolean y = false;
        // Operator AND -> jika salah satu operan false maka hasilnya false
        if (x && y) {
            System.out.println("Kondisi terpenuhi");
        } else {
            System.out.println("Kondisi tidak terpenuhi");
        }

        // Operator OR -> jika salah satu operan true maka hasilnya true
        if (x || y) {
            System.out.println("Kondisi terpenuhi");
        } else {
            System.out.println("Kondisi tidak terpenuhi");
        }

        // Operator NOT -> nilai operan akan berbalik
        if (!x) {
            System.out.println("Kondisi terpenuhi");
        } else {
            System.out.println("Kondisi tidak terpenuhi");
        }
    }
}
