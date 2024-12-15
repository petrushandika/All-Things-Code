package Basic;

public class DataType {
    public static void main(String[] args) {
        // String lebih dari 1 karakter -> angka, huruf, simbol, dan spasi
        String stringData = "Petrus Handika";
        System.out.println(stringData);

        // Char hanya 1 karakter
        char charData = 'a';
        System.out.println(charData);

        // Boolean hanya ada 2 jenis data -> true / false
        boolean booleanData = true;
        System.out.println(booleanData);

        // Number -> Bilangan Bulat
        // byte -> maksimal 3 angka
        byte byteData = 123;
        //short -> maksimal 5 angka
        short shortData = 12345;
        //int -> maksimal 10 angka
        int intData = 1234567891;
        //long -> lebih dari int
        long longData = 123456789101112L;

        // Number -> Bilangan Desimal
        // double lebih dari float
        float floatData = 12.45F;
        double doubleData = 12.234;
    }
}
