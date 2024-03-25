public class SquareCubeTable {
    public static void main(String[] args) {
        // Print table header
        System.out.printf("%-10s%-10s%-10s\n", "Number", "Square", "Cube");
        
        // Calculate and print squares and cubes for numbers from 0 to 10
        for (int i = 0; i <= 10; i++) {
            int square = i * i;
            int cube = i * i * i;
            System.out.printf("%-10d%-10d%-10d\n", i, square, cube);
        }
    }
}