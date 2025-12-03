// package declaration removed

import java.util.Scanner;

public class switchcase {
     public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);


        String nama;
        while (true) {
            System.out.print("Masukkan nama Anda: ");
            nama = sc.nextLine();

            System.out.print("Apakah nama sudah benar? (Y/N): ");
            String benar = sc.nextLine().toLowerCase();

            if (benar.equals("y")) {
                break;
            } else {
                System.out.println("Nama salah. Silakan masukkan nama lagi.\n");
            }
        }

        System.out.print("Masukkan NIM Anda Untuk mengecek saldo: ");
        int nim = sc.nextInt();
        double saldo = nim;

        System.out.println("\nHalo, " + nama + "!");
        System.out.println("Saldo Anda adalah: Rp " + saldo);

        // Menu
        System.out.println("""
                ===== Menu =====
                1. Cek Saldo
                2. Tarik Tunai
                3. Setor Tunai
                4. Transfer
                5. Keluar
                """);

        System.out.print("Pilih menu (1-5): ");
        int pilihan = sc.nextInt();

        switch (pilihan) {
            case 1:
                System.out.println(nama + ",");
                System.out.println("Saldo Anda adalah: Rp " + saldo);
                break;

            case 2:
                System.out.print("Masukkan jumlah tarik tunai: Rp ");
                int tarik = sc.nextInt();

                if (tarik > saldo) {
                    System.out.println("Saldo tidak mencukupi untuk tarik tunai sebesar Rp " + tarik);
                } else {
                    saldo -= tarik;
                    System.out.println("Tarik tunai sebesar Rp " + tarik + " berhasil.");
                    System.out.println("Sisa saldo Anda: Rp " + saldo);
                }
                break;

            case 3:
                System.out.print("Masukkan jumlah setor tunai: Rp ");
                int setor = sc.nextInt();

                saldo += setor;
                System.out.println("Setor tunai sebesar Rp " + setor + " berhasil.");
                System.out.println("Saldo Anda sekarang: Rp " + saldo);
                break;

            case 4:
                System.out.print("Masukkan jumlah transfer: Rp ");
                int transfer = sc.nextInt();

                saldo -= transfer;
                System.out.println("Transfer sebesar Rp " + transfer + " berhasil.");
                System.out.println("Saldo Anda sekarang: Rp " + saldo);
                break;

            case 5:
                System.out.println("Keluar dari menu. Sampai jumpa lagi!");
                break;

            default:
                System.out.println("Pilihan tidak valid. Silakan pilih menu antara 1-5.");
                break;
        }

        System.out.println("\nTerima kasih telah menggunakan layanan kami!");
        System.out.println("==============");
 
    }
}