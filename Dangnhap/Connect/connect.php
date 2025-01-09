<?php 

class Database_ql_taikhoan
{
    private static $hostname = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $database = "quanlytotnghiep";
    protected static $conn = NULL;

    public static function Connect()
    {
        self::$conn = mysqli_connect(self::$hostname, self::$username, self::$password, self::$database);

        if (!self::$conn) {
            echo "kết nối thất bại";
        } else {
            mysqli_set_charset(self::$conn, 'utf8');
        }
    }

    public static function Execute($sql)
    {
        $result = self::$conn->query($sql);
        return $result;
    }

    public static function Getdata($sql)
    {
        $result = self::Execute($sql);
        $arr = array();
        if (mysqli_num_rows($result) > 0) {
            while ($arrs = mysqli_fetch_array($result)) {
                $arr[] = $arrs;
            }
        } else {
            $arr = 0;
        }
        return $arr;
    }
}
?>
