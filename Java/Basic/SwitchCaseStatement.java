package Basic;

public class SwitchCaseStatement {
    public static void main(String[] args) {
        String n = "B";

        switch(n) {
            case "A":
                System.out.println("Nilai lebih dari 85");
                break;
            case "B":
                System.out.println("Nilai lebih dari 75");
                break;
            case "C":
                System.out.println("Nilai lebih dari 60");
                break;
            default:
                System.out.println("Nilai kurang dari 60");
                break;
        }
    }
}
