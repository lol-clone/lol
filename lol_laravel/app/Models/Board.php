<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Board extends Model
{
    use HasFactory, softDeletes;

    protected $table = 'board'; // 테이블명 셋팅 해야함 안하면 라라벨에서 디폴트 설정이동 경로 탐색됨 
    protected $primaryKey = 'b_id'; // 아이디 셋팅

    protected $fillable = [
        'b_title',
        'b_content'
    ];

}
