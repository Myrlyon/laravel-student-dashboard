<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.all', [
            'title' => 'Student',
            'student' => Student::all(),
        ]);
    }

    public function home()
    {
        return view('home', [
            "title" => "home",
        ]);
    }

    public function about()
    {
        return view('about', [
            "title" => "about",
            "nama" => "Marlen Edzel Satriani",
            "kelas" => "11 PPLG 2",
            "foto" => "img/capone.jpg",
        ]);
    }

    public function show($student)
    {
        return view('student.detail', [
            'title' => 'detail-student',
            'student' => Student::find($student),
        ]);
    }

    public function create()
    {
        return view('student.create', [
            "title" => "create-student",
            "kelas" => Kelas::all(),
        ]);
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nis' => 'required|unique:students,nis',
            'nama_siswa' => 'required',
            'kelas_id' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ]);

        Student::create($request->all());

        return redirect('/student/all')->with('success', 'Data Student berhasil ditambahkan');
    }

    public function edit($id)
    {
        $student = Student::find($id);

        return view('student.edit', [
            'student' => $student,
            'kelas' => Kelas::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nis' => 'required|unique:student,nis,' . $id,
            'nama' => 'required',
            'kelas_id' => 'required',
            'alamat' => 'required',
        ]);
        $student = Student::find($id);
        $student->update($validateData);

        return redirect('/student/all')->with('success', 'Data siswa berhasil diperbarui');
    }

    public function remove($id)
    {
        $student = Student::find($id);
        if (!$student) {
            return redirect('/student/all')->with('error', 'Data not found');
        }

        $student->delete();
        return redirect('/student/all')->with('success', 'Data berhasil dihapus');
    }
}
