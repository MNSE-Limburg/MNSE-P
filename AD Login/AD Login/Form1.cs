using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.DirectoryServices.AccountManagement;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace AD_Login
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string domain = "politie-limburg.pet";
            string username = txt_username.Text;
            string password = txt_password.Text;

            if (IsUserValid(domain, username, password))
            {
                MessageBox.Show("User account exists.", "Success", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            else
            {
                MessageBox.Show("User account does not exist or password is incorrect.", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private bool IsUserValid(string domain, string username, string password)
        {
            using (PrincipalContext context = new PrincipalContext(ContextType.Domain, domain))
            {
                // Check if the user exists and the provided password is correct
                return context.ValidateCredentials(username, password);
            }
        }

        private void txt_username_TextChanged(object sender, EventArgs e)
        {

        }

        private void txt_password_TextChanged(object sender, EventArgs e)
        {

        }
    }
}
