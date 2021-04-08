    <?php



use Illuminate\Database\Seeder;
use DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mahasiswa')->insert([
            'name' => 'Muhammad Rahadian Nugraha',
            'alamat' => "Kab Jember",
            'jenis_kelamin' => 1,
            'prodi' => 1,
            'no_hp' => "083835742425"
        ]);
    }
}
