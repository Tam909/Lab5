<?php

namespace App\Models;

use PDO;

class BaseModel
{
    protected $conn = null;
    protected $tableName = null;
    protected $primaryKey = 'id';
    protected $sqlBuilder = null;

    public function __construct()
    {
        $host = HOST;
        $dbname = DBNAME;
        $username = USERNAME;
        $password = PASSWORD;
        $port = PORT;
        try {
            $this->conn = new \PDO("mysql:host=$host;dbname=$dbname;charset=utf8; port=$port", $username, $password);
        } catch (\PDOException $e) {
            echo ("Kết nối thất bại: " . $e->getMessage());
        }
    }

    public static function all()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        // dd($model->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * create: thêm mới dữ liệu từ 1 bảng
     * $data: dữ liệu mảng có key và value trong key là tên cột còn value là giá trị tương ứng
     */
    public static function create($data)
    {
        $model = new static;
        $sql = "INSERT INTO   $model->tableName(";
        $values = " VALUES(";
        foreach ($data as $column => $val) {
            $sql .= "`$column`,";
            $values .= ":$column,";
        }

        $sql = rtrim($sql, ',') . ")" . rtrim($values, ',') . ")";
        // dd($sql);
        $stmt = $model->conn->prepare($sql);
        $stmt->execute($data);
    }

    public static function delete($id)
    {
        $model = new static;
        $sql = "DELETE FROM $model->tableName WHERE $model->primaryKey=:$model->primaryKey";
        // dd($sql);
        $stmt = $model->conn->prepare($sql);
        $stmt->execute(["$model->primaryKey" => $id]);
    }

    /**
     * update: phương thức cập nhậtnhật
     * @data: là những dữ liệu dùng để cập nhật có key là tên cột và value tương ứng
     * @id: là gtri khóa chính 
     */

    public static function update($data, $id)
    {
        $model = new static;
        $sql = "UPDATE $model->tableName SET ";
        foreach ($data as $column => $val) {
            $sql .= "`$column` = :$column, ";
        }
        // loại bỏ dấu ", "
        $sql = rtrim($sql, ", ") . " WHERE $model->primaryKey=:$model->primaryKey";

        $stmt = $model->conn->prepare($sql);

        //Them id vafo trong mang
        // dd($sql);
        $data["$model->primaryKey"] = $id;
        return $stmt->execute($data);
    }

    /**
     * @find: lấy 1 dữ liệu theo id
     */

    public static function find($id)
    {
        $model = new static;
        $sql = "SELECT * FROM $model->tableName WHERE $model->primaryKey=:$model->primaryKey";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute(["$model->primaryKey" => $id]);
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result[0] ?? [];
    }

    /**
     * @where phương thức lấy dữ liệu theo điều kiện
     * @param column: tên cột làm điều kiện
     * @param operator: biểu thức điều kiện
     * @param value: giá trị
     */
    public static function where($column, $operator, $values)
    {
        $model = new static;
        if ($model->sqlBuilder == null) {
            $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE `$column` $operator '$values'";
        } else {
            $model->sqlBuilder .= " WHERE `$column` $operator '$values'";
        }
        return $model;
    }

    /**
     * @method get: lấy dữ liệu
     * @param column: tên cột làm điều kiện
     * @param operator: biểu thức điều kiện
     * @param value: giá trị
     */

    public function get()
    {
        $stmt = $this->conn->prepare($this->sqlBuilder);
        // dd($this->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function first()
    {
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS)[0] ?? [];
    }

    //AND
    /**
     * @method andwhere: phương thức kết hợp với where có điều kiện AND
     * @param column: tên cột làm điều kiện
     * @param operator: biểu thức điều kiện
     * @param value: giá trị
     */

    public function andWhere($column, $operator, $values)
    {
        $this->sqlBuilder .= " AND `$column` $operator '$values'";
        return $this;
    }

    //OR
    /**
     * @method arwhere: phương thức kết hợp với where có điều kiện OR
     * @param column: tên cột làm điều kiện
     * @param operator: biểu thức điều kiện
     * @param value: giá trị
     */

    public function orWhere($column, $operator, $values)
    {
        $this->sqlBuilder .= " OR `$column` $operator '$values'";
        return $this;
    }

    /**
     * @method select: phương thức lấy dữ liệu theo lựa chọn cột cần lấy 
     * 
     */

    public static function select($column = ['*'])
    {
        $model = new static;
        $model->sqlBuilder = "SELECT ";
        foreach ($column as $col) {
            $model->sqlBuilder .= " $col, ";
        }
        $model->sqlBuilder = rtrim($model->sqlBuilder, ", ") . " FROM $model->tableName";

        return $model;
    }

    /**
     * @method join: phương thức dùng nói hai bảng
     * @param $table1: bảng 1 là bảng hiện tại đang chọn
     * @param $table2: bảng 2
     * @param $reference: khóa ngoại
     * @param $primary: khóa chính
     */

    public function join($table1, $table2, $reference, $primary)
    {
        $this->sqlBuilder .= " JOIN $table2 ON $table1.$reference = $table2.$primary ";
        // dd($this->sqlBuilder);
        return $this;
    }
}
