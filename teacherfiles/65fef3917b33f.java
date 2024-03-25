public class YakobYisak{
    public static void main(String[] args) {
        // Loop from 1 to 100
        for (int i = 1; i <= 100; i++) {
            // Check if the number is divisible by both 3 and 5
            if (i % 3 == 0 && i % 5 == 0) {
                System.out.println("YakobYisak");
            }
            // Check if the number is divisible by 3
            else if (i % 3 == 0) {
                System.out.println("Yakob");
            }
            // Check if the number is divisible by 5
            else if (i % 5 == 0) {
                System.out.println("Yisak");
            }
            // If none of the above conditions are met, print the number itself
            else {
                System.out.println(i);
            }
        }
    }
}