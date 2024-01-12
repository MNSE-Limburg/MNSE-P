# Install and configure Active Directory Domain Services

# Step 1: Install AD DS Role
Install-WindowsFeature -Name AD-Domain-Services -IncludeManagementTools

# Step 2: Configure AD DS
Install-ADDSForest `
  -DomainName "politie-limburg.pet" `
  -DomainNetBiosName "politie-limburg" `
  -ForestMode "Windows2016Forest" `
  -DomainMode "Windows2016Domain"

# Step 3: Create an organizational unit (OU)
New-ADOrganizationalUnit -Name "Adm" -Path "DC=politie-limburg,DC=local"

# Step 4: Create a user account
$UserPassword = ConvertTo-SecureString "P@ssw0rd" -AsPlainText -Force
New-ADUser -SamAccountName "Admin" -UserPrincipalName "Administrator@politie-limburg.pet" -Name "Ad Min" -GivenName "John" -Surname "Doe" -Enabled $true -Path "OU=Medewerkers01,DC=politie-limburg,DC=pet" -AccountPassword $UserPassword -ChangePasswordAtLogon $true

# Step 5: Create a security group
New-ADGroup -Name "ITAdmins" -GroupScope Global -GroupCategory Security -Path "OU=MyUsers,DC=politie-limburg,DC=pet"

# Step 6: Add user to the security group
Add-ADGroupMember -Identity "ITAdmins" -Members "Admin"

# Step 7: Configure DNS settings
$DnsServerAddress = "127.0.0.1"
$NetworkAdapter = Get-NetAdapter | Where-Object { $_.Status -eq 'Up' }
Set-DnsClientServerAddress -InterfaceIndex $NetworkAdapter.InterfaceIndex -ServerAddresses $DnsServerAddress

# Step 8: Restart computer to apply changes
Restart-Computer -Force
