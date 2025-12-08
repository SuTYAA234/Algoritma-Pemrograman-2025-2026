package pertemuan11;

import java.util.Scanner;

public class nimarray {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        // Input NIM
        System.out.print("Masukkan NIM: ");
        String nim = sc.nextLine();

        // Ubah string menjadi array digit
        int[] digit = new int[nim.length()];
        for (int i = 0; i < nim.length(); i++) {
            digit[i] = Character.getNumericValue(nim.charAt(i));
        }

        // Total
        int total = 0;
        for (int d : digit) {
            total += d;
        }

        // Maks & Minim
        int maks = digit[0];
        int minim = digit[0];
        for (int d : digit) {
            if (d > maks) maks = d;
            if (d < minim) minim = d;
        }

        // Rata-rata
        double rata = (double) total / digit.length;

        // Reverse array
        int[] rev = new int[digit.length];
        for (int i = 0; i < digit.length; i++) {
            rev[i] = digit[digit.length - 1 - i];
        }

        
        System.out.print("Digit        : ");
        for (int d : digit) {
            System.out.print(d + " ");
        }
        System.out.println();

        System.out.println("Total        : " + total);
        System.out.println("Maks         : " + maks);
        System.out.println("Minim        : " + minim);
        System.out.println("Rata-rata    : " + rata);

        System.out.print("Reverse      : ");
        for (int r : rev) {
            System.out.print(r + " ");
        }
        System.out.println();
    }
}