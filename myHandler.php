<?php

class MyHandler implements SessionHandlerInterface
{


    public function close()
    {
        return true;
        // TODO: Implement close() method.
    }

    public function destroy($id)
    {
        $files = "./Session/sesid_$id.json";
        if (file_exists($files)){
            unlink($files);

        }
        return true;
        // TODO: Implement destroy() method.
    }

    public function gc($max_lifetime)
    {

        // TODO: Implement gc() method.
    }

    public function open($path, $name)
    {

        $this->path = $path;

          return true;
        // TODO: Implement open() method.
    }

    public function read($id)
    {

        return (string) file_get_contents("./Session/sesid_$id.json");

        // TODO: Implement read() method.
    }

    public function write($id, $data)
    {
        return  file_put_contents("./Session/sesid_$id.json", json_encode($_SESSION)) ;

        // TODO: Implement write() method.
    }
}
