<?php
/**
 * Simple PHP Git deploy script, intended to run with Jekyll. Automatically deploy
 * a Jekyll site when changes to Github are committed.
 *
 * @version 0.1
 * @author Jason Heppler (jason@jasonheppler.org)
 * @link http://jasonheppler.org
 *
 * @license GNU General Public LIcense v3.0 - license.txt
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 */

error_reporting(E_ALL);
ini_set('display_errors', '1');

/**
 * Configure
 */

$LOCAL_ROOT       = "/afs/ir/users/j/h/jheppler/WWW/cesta";
$REMOTE_REPO      = "https://github.com/hepplerj/ockham.git";

/**
 * Deployment
 */

shell_exec("cd {$LOCAL_ROOT} && git pull")

?>
