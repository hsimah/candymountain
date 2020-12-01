$Principal = New-Object System.Security.Principal.WindowsPrincipal([System.Security.Principal.WindowsIdentity]::GetCurrent())
$AdminRole = [System.Security.Principal.WindowsBuiltInRole]::Administrator
if (-not $Principal.IsInRole($AdminRole)) {
    Start-Process -FilePath powershell -ArgumentList $MyInvocation.MyCommand.Definition -Verb runas
    exit
}
Add-Content -Path \Windows\system32\drivers\etc\hosts -Value "127.0.0.1 candymountain.local"