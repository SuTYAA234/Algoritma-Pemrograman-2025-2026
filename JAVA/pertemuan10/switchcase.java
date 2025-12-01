// package declaration removed

import java.util.Scanner;

public class switchcase {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        boolean valid = false;
        String nama = "muhammad rivan surya";

       
        while (!valid) {
            System.out.print("Masukkan nama: ");
            String input = sc.nextLine();

            if (input.equals(nama)) {
                System.out.println("Nama sesuai!");
                valid = true;
            } else {
                System.out.println("Nama salah, coba lagi!");
            }
        }

        int asli = 2510393;
        double saldo = 2510393;

        String menu = """
                ====== MENU ======
                1. Cek saldo
                2. Transfer
                3. Tarik tunai
                4. Setor tunai
                5. Keluar
                """;

        System.out.println(menu);

        System.out.println("=============HASIL TRANSAKSI==============");
        System.out.println("Halo " + nama);
        System.out.print("Masukkan pilihan menu: ");
        int pilihanUser = sc.nextInt();


        switch (pilihanUser) {

            case 1:
                System.out.print("Masukan NIM anda: ");
                String nim = sc.next();

                if (nim.equals(String.valueOf(asli))) {
                    System.out.println("Sisa saldo di rekening Anda Rp." + saldo);
                } else {
                    System.out.println("NIM salah! Tidak dapat menampilkan saldo.");
                }
                break;

            case 2:
                System.out.println("Fitur sedang dalam pengembangan");
                break;

            case 3:
                System.out.println("Fitur sedang dalam pengembangan");
                break;

            case 4:
                System.out.println("Fitur sedang dalam pengembangan");
                break;

            case 5:
                System.out.println("Keluar dari menu. Sampai jumpa lagi!");
                break;

            default:
                System.out.println("Pilihan tidak ada, silakan pilih antara 1-5");
                break;
        }


        System.out.println("\nTerimakasih telah menggunakan layanan kami.");
        System.out.println("==========================================");

    }
}
