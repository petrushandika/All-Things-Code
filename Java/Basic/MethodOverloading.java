package Basic;

public class MethodOverloading {
    // Method overloading -> sebuah kelas bisa memiliki beberapa method dengan nama yang sama tetapi memiliki parameter yang berbeda
    static void printValue(int value) {
        System.out.println("Nilai int : " + value);
    }

    static void printValue(double value) {
        System.out.println("Nilai double : " + value);
    }

    static void printValue(String value) {
        System.out.println("Nilai String : " + value);
    }

    static void printValue(boolean value) {
        System.out.println("Nilai boolean : " + value);
    }

    public static void main(String[] args) {
        printValue(10);
        printValue(165.5);
        printValue("Hello World");
        printValue(true);
    }
}