<?php

namespace Leaf;

class ViewPhp
{
    protected $data = [];

    protected $config = [
        'templateDir' => 'views/',
        'debug' => false,
    ];

    public function set($key, $value = null): self
    {
        if (is_array($key)) {
            $this->data = array_merge($this->data, $key);
        } else {
            $this->data[$key] = $value;
        }

        return $this;
    }

    public function configure($setting, $value = null): self
    {
        if (is_array($setting)) {
            $this->config = array_merge($this->config, $setting);
        } else {
            $this->config[$setting] = $value;
        }

        return $this;
    }

    public function render(string $file, array $data = []): string
    {
        extract(array_merge($this->data, $data));

        ob_start();
        include $file;
        $html = ob_get_clean();

        return $html;
    }
}
