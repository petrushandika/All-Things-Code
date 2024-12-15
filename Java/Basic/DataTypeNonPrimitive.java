package Basic;

public class DataTypeNonPrimitive {
    public static void main(String[] args) {
        // Autoboxing : konversi int ke Integer
        int number = 21;
        java.lang.Integer wrappedNumber = number;

        // Unboxing : konversi Integer ke int
        Integer anotherNumber = new Integer(99);
        int unwrappedNumber = anotherNumber;

        System.out.println("Autoboxing : " + wrappedNumber);
        System.out.println("Unboxing : " + unwrappedNumber);

        // Penggunaan metode parseInt() dari Integer
        String strNumber = "123";
        int parsedNumber = Integer.parseInt(strNumber);
        System.out.println("Hasil Parsing : " + parsedNumber);
    }
}
