<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Hash;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Thêm dữ liệu vào bảng roles
        DB::table('roles')->insert([
            [
                'name' => 'Admin',
                'authorities' => 'admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Staff',
                'authorities' => 'admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Kitchen Staff',
                'authorities' => 'admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'User',
                'authorities' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
        DB::table('users')->insert([
            [
                'full_name' => 'Nguyễn A',
                'phone' => '0976512342',
                'email' => 'user@gmail.com',
                'password' => Hash::make('12345678'), // Mã hóa mật khẩu
                'status' => 'normal',
                'role_id' => 4, // Giả định rằng bạn đã có một role với ID = 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Admin',
                'phone' => '0999999999',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'), // Mã hóa mật khẩu
                'status' => 'normal',
                'role_id' => 1, // Giả định rằng bạn đã có một role với ID = 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Nhân viên cửa hàng',
                'phone' => '0396416189',
                'email' => 'staff@gmail.com',
                'password' => Hash::make('12345678'), // Mã hóa mật khẩu
                'status' => 'normal',
                'role_id' => 2, // Giả định rằng bạn đã có một role với ID = 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Nhân viên bếp',
                'phone' => '0921044773',
                'email' => 'kitchenstaff@gmail.com',
                'password' => Hash::make('12345678'), // Mã hóa mật khẩu
                'status' => 'normal',
                'role_id' => 3, // Giả định rằng bạn đã có một role với ID = 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
