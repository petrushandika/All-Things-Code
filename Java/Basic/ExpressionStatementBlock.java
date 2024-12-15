package Basic;

public class ExpressionStatementBlock {
    public static void main(String[] args) {
        // Expression -> Entitas sintaks yang menghasilkan sebuah nilai
        // Statement -> Pernyataan yang mengintruksikan untuk melakukan tindakan tertentu

        int b = 500 + 50; // statement -> int b & expression -> 500 + 50
        int a;
        int c = 4;
        System.out.println(a = 3);

        // Jenis statement
        // assignment statement
        int d = 75;

        // increment statement
        d++;

        // method invocation statement -> tindakan memanggil atau menjalankan suatu metode (fungsi) dan mengassign (mengisikan) hasilnya ke suatu variabel atau nilai
        System.out.println("Hello");

        // Block -> diawali dan diakhiri kurung kurawal
        int [] e = {1, 2, 3, 4,5 };
        System.out.println(e[0]);
    }
}
